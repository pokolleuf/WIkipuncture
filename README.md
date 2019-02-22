# Quanturi Backend API

## GET URLs

#### `/admin/login`
Proceed to login
##### Params
name | type | comment | description
---- | ---- | ------- | ---------
username | `String` |  *REQUIRED*  | Ex: `"bs203"`
password | `String` |  *REQUIRED*  | Ex: `"bs203"`
##### Response example

```json
{
    "status_code": 0,
    "session_id": "XXXXXXXXXXXXXXXXXXXX",
    "last_login": "YYYYMMDDHHmmss"
}
```

#### `/client/userInfo`
Get user info
##### Params
name | type | comment | description
---- | ---- | ------- | ---------
UID | `String` | *OPTIONAL* (for admin usage) | Ex: `"1042"`
##### Response example

```json
{
    "status_code": 0,
    "userinfo": {
        "U_ID": "1042",
        "plans": [
            {
                "planLevel": 3,
                "dueDate": "20200913062701"
            }
        ],
        "email": "teppo.veijonen@quanturi.com",
        "phones": [
            {
                "phoneNumber": "+19342227322",
                "index": 0,
                "confirmed": 1
            }
        ],
        "lastname": "Quanturi",
        "firstname": "Teppo Veijonen",
        "address": "Lars Sonckin kaari 16",
        "address2": "",
        "zip": "02600",
        "city": "Espoo",
        "country": "fi",
        "storages": [
            {
                "name": "Stockage 3",
                "n_stacks": "5",
                "n_floors": "5",
                "n_rows": "9",
                "index": "3",
                "order": "3",
                "stack_numbering": "0"
            }
        ]
    }
}
```

#### `/client/getSessionInfo`
Get session info of current logged user
##### Params
`None`
##### Response example

As a normal user

```json
{
    "username": "bs203",
    "bs_ids": [
        "F0000203"
    ],
    "ui_preferences": {
        "language": "en",
        "degrees": "C"
    },
    "status_code": 0
}
```
As an admin

```json
{
    "admin": 1,
    "deve": 1,
    "username": "TeppoV17",
    "users": [
        {
            "username": "bs203",
            "UID": "1042",
            "bs_ids": [
                "F0000203"
            ],
            "ui_preferences": {
                "language": "en",
                "degrees": "C"
            },
            "status_code": 0
        },
        ...
    ]
}
```

#### `/client/data`
Get sensors data from a specified basestation
##### Params
name | type | comment | description
---- | ---- | ------- | ---------
basestationID | `String` |  *REQUIRED*  | Ex: `"F0000203"`
##### Response example

```json
[
    {
        "sensor_id": "003880",
        "meas_ts": 1538564957,
        "bs_ts": 1538563865,
        "batt_ts": 1525363200,
        "batt_voltage": 366.3,
        "sensor_RSSI": -59,
        "bs_RSSI": -38,
        "temperature": 21.6
    },
    ...
]
```

#### `/client/sensorData`
Get a specified sensor's data points
##### Params
name | type | comment | description
---- | ---- | ------- | ---------
basestationID | `String` |  *REQUIRED*  | Ex: `"F0000203"`
sensorID | `String` |  *REQUIRED*  | Ex: `"003880"`
startDate | `String` |  *REQUIRED*  | Ex: `"20181025235900"`
endDate | `String` |  *REQUIRED*  | Ex: `"20181125235900"`
maxPoints | `Number` |  *REQUIRED*  | Ex: `"50"`
##### Response example

```json
[
    {
        "sensor_id": "003880",
        "bs_diff": 135205,
        "meas_ts": 1540561389,
        "batt_voltage": "369.90",
        "sensor_RSSI": "-33.00",
        "bs_RSSI": "-33.00",
        "temperature": "22.40"
    },
    ...
]
```

#### `/client/bsConf`
Get a specified basestation's configuration
##### Params
name | type | comment | description
---- | ---- | ------- | ---------
basestationID | `String` |  *REQUIRED*  | Ex: `"F0000203"`
##### Response example

```json
{
    "status_code": 0,
    "conf_data": {
        "bast_ver": "11",
        "communication_interval": 60,
        "period": 600,
        "jitter": 60,
        "measurement_interval_0": 120,
        "measurement_interval_1": 300,
        "measurement_interval_2": 300,
        "alarm_treshold_1": 10,
        "alarm_treshold_2": 50,
        "alert_messages": 0,
        "warning_messages": 0,
        "temp_change_wakeup_treshold": 2.5,
        "sensor_configurations": [
            {
                "sensor_id_sys": "003880",
                "sensor_name": "3880",
                "sensor_id_bs": "00 01 A1 00"
            },
            ...
        ],
        "clear_buffer": 0,
        "timeout": 0,
        "buffer_max": 0,
        "bs_id": "F0000203",
        "storage_configurations": [
            {
                "name": "Stockage 3",
                "n_stacks": "5",
                "n_floors": "5",
                "n_rows": "9",
                "index": "3",
                "order": "3",
                "stack_numbering": "0"
            }
        ]
    }
}
```

#### `/client/getPasswordCodeByUsername`
Send a password reset code via SMS
##### Params
name | type | comment | description
---- | ---- | ------- | ---------
username | `String` |  *REQUIRED*  | Ex: `"bs203"`
##### Response example

```json
{"status_code":0, "username":"bs203"}
```

## POST URLs

#### `/admin/logout`
Proceed to logout
##### Params
`None`
##### Response example

```json
{"status_code":0}
```

#### `/client/bsConf`
Post changes in specified basestation's configuration
##### Params
name | type | comment | description
---- | ---- | ------- | ---------
basestationID | `String` |  *REQUIRED*  | Ex: `"F0000203"`
##### Body example

```json
{
    "alarm_treshold_1": 20, REQUIRED
    "alarm_treshold_2": 50, REQUIRED
    "alert_messages": 1, REQUIRED
    "warning_messages": 0 REQUIRED
}
```
##### Response example

```json
{"status_code":0}
```

#### `/client/sensorConf`
Post changes in specified sensor's configuration
##### Params
name | type | comment | description
---- | ---- | ------- | ---------
basestationID | `String` |  *REQUIRED*  | Ex: `"F0000203"`
##### Body example

```json
{
    "sensorConfigurations": [
        {
            "sensor_id_sys": "003880",
            "sensor_name": "3880",
            "sensor_id_bs": "00 01 A1 00"
        },
        ...
    ]
}
```
##### Response example

```json
{"status_code":0}
```

#### `/client/uiPrefs`
Post changes in the user's preferences
##### Params
`None`
##### Body example

```json
{
    "prefs": {
        "language": "fr", REQUIRED
        "degrees": "C" REQUIRED
    },
    "UID": "1042" REQUIRED FOR ADMIN
}
```
##### Response example

```json
{"status_code":0}
```

#### `/client/resetPassword`
Change user's password thanks to a SMS reset code
</br>
*Note: this mimics a login when succeed*
##### Params
`None`
##### Body example

```json
{
    "resetCode": 123456, REQUIRED
    "username": "bs203", REQUIRED
    "newPassword": "sTroNg_paSsWorD_#@9573" REQUIRED
}
```
##### Response example


```json
{
    "status_code": 0,
    "session_id": "XXXXXXXXXXXXXXXXXXXX",
    "last_login": "YYYYMMDDHHmmss"
}
```
#### `/client/userInfo`
Post changes in user info
##### Params
`None`
##### Body example

```json
{
    "email": "teppo.veijonen@quanturi.com",
    "lastname": "Quanturi",
    "firstname": "Teppo Veijonen",
    "address": "Lars Sonckin kaari 16",
    "address2": "",
    "zip": "02600",
    "city": "Espoo",
    "country": "fi",
    "UID": "1042" REQUIRED FOR ADMIN
}
```
##### Response example

```json
{"status_code":0}
```

#### `/client/changeUserPhone`
Start the process of changing main user phone number by sending a confirmation code via SMS to the new phone number
##### Params
`None`
##### Body example

```json
{
    "oldPhone": "+358502345678", REQUIRED
    "newPhone": "+358502345679", REQUIRED
    "UID": "1042" REQUIRED FOR ADMIN
}
```
##### Response example

```json
{"status_code":0}
```

#### `/client/changeAdditionalPhone`
Post changes on one user's additional phone number
##### Params
`None`
##### Body example

```json
{
    "index": "1", REQUIRED
    "phoneNumber": "+358502345879", REQUIRED
    "phoneName": "Sauli", REQUIRED
    "UID": "1042" REQUIRED FOR ADMIN
}
```
##### Response example

```json
{"status_code":0}
```

#### `/client/changeUserPassword`
Change user password
##### Params
`None`
##### Body example

```json
{
    "oldPassword": "weak_password", REQUIRED
    "newPassword": "sTroNg_paSsWorD_#@9573", REQUIRED
    "username": "bs203", REQUIRED FOR ADMIN
    "UID": "1042" REQUIRED FOR ADMIN
}
```
##### Response example

```json
{"status_code":0}
```

#### `/admin/confirmMobile`
Finish the process of changing main user phone number thanks to the SMS confirmation code
##### Params
`None`
##### Body example

```json
{
    "code": "1234", REQUIRED
    "username": "bs203", REQUIRED FOR ADMIN
}
```
##### Response example

```json
{"status_code":0}
```

## Status codes

#### `0`
OK
#### `99`
Missing basestationID call  parameter
#### `101`
Missing username or password
#### `103` or `1003`
Unauthorized
#### `110`
Missing basestationID, sensorID, startDate, endDate or maxPoints call parameter
#### `1001`
User not found or basestation not found or parameters missing
#### `1002`
Basestation not found

</br>
> ** By Quentin Picault ** </br> © 2019 Quanturi Oy.
