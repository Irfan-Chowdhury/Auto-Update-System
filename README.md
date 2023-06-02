<div align="center">
    <h1>Auto Update System</h1>
    <h2>Project Details</h2>
</div>

<br>

### Configuration
- PHP-8.1
- Laravel-10


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

<br>

### Environement Variable (.ENV) Setting
```
PRODUCT_MODE=DEMO (or DEVELOPER or CLIENT)
VERSION=1.2.1
BUG_NO=1210 
```

<i><b>Important Note for PRODUCT_MODE : </b></i> <br>
- <b>DEVELOPER</b> : To access for developers.
- <b>CLIENT</b> : For production I mean when the clients use your application and they can get notification and update.
- <b>DEMO</b> : Client's product have to connect with a main server to transfer files and others from main server to client server. So there should be a primary server for this original products of a comapany/organization/personal. 
- If you want you can customize the attributes.

<br>

<div align="center">
    <h2>Developer Section</h2>
</div>


### General Setting 
- Goto the url to access: [your_domain_name.com/developer-section]()
- Product mode should be <b>DEVELOPER</b> 
- <b>Latest Version Upgrade</b> : You have to enable this when a new version will be released so that old clients get notification and can update.
- <b>Latest Version DB Migrate</b> : If need to DB migrate, then you have to enable this also. 
- <b>Version Upgrade URL :</b>  In your server, you have to create a directory and all necessary files have to import there so that the files from here can transfer into client server.
- <b>Bug Update : </b>  Same as like "Latest Version Upgrade".
- <b>Bug DB Migrate : </b>  Same as like "Latest Version DB Migrate".
- <b>Bug Update URL : </b>  Same as like "Version Upgrade URL".


![General Section](https://snipboard.io/XSRbpG.jpg)


### Version Upgrade Setting
- In <b>Files</b> section you have to input file name which file you want to transfer from your main server to client server.
- In <b>Logs</b> section clients can see the change log details.

![Version Upgrade Setting](https://snipboard.io/a0b3uU.jpg)

### Bug Update Setting

- Similar as like <b>Version Upgrade Setting</b>.


![Version Upgrade Setting](https://snipboard.io/LreHJY.jpg)

