<h1 align="center">
    Auto Update System
</h1>


### File Structure


```
|-- app 
    |-- Http
        |-- Controllers
            |-- ClientAutoUpdateController.php
            |-- DemoAutoUpdateController.php
            |-- DeveloperSectionController.php
        |-- traits
            |-- AutoUpdateTrait.php
            |-- ENVFilePutContent.php
            |-- JSONFileTrait.php
|-- config 
    |-- auto_update.php
|-- resources 
    |-- views
        |-- developer_section
            |-- bug_update_setting.blade.php
            |-- general.blade.php
            |-- index.blade.php
            |-- version_upgrade_setting.blade.php
        |-- bug_update.blade.php
        |-- dashboard.blade.php
        |-- version_upgrade.blade.php
|-- routes 
    |-- api.php
    |-- web.php
|-- track 
    |-- control.json
    |-- fetch-data-bug.json
    |-- fetch-data-upgrade.json
    |-- general.json
    |-- sample.json
|-- .env 
```
