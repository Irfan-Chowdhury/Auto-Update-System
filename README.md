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
    |-- Traits
        |-- AutoUpdateTrait.php
        |-- ENVFilePutContent.php
        |-- JSONFileTrait.php
|-- config 
    |-- auto_update.php
|-- resources 
    |-- views
        |-- bug_update
            |-- index.blade.php
        |-- developer_section
            |-- bug_update_setting.blade.php
            |-- general.blade.php
            |-- index.blade.php
            |-- version_upgrade_setting.blade.php
        |-- includes
            |-- session_message.blade.php
        |-- version_upgrade
            |-- index.blade.php
        |-- dashboard.blade.php    
        |-- layout.blade.php    
|-- routes 
    |-- api.php
    |-- web.php
|-- track 
    |-- control.json
    |-- fetch-data-bug.json
    |-- fetch-data-upgrade.json
    |-- general.json
    |-- sample.json
|-- .env.example 
```


<h1 align="center">
    Project Details
</h1>

![General Section](https://snipboard.io/dyGhb5.jpg)
