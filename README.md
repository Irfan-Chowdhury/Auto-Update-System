<div align="center">
    <h1>Auto Update System</h1>
    <h2>Project Details</h2>
</div>

<br>

### About
Imagine you have an application that already has numerous clients using it on their server. Now, you want to add a new feature and release it as a new version. Alternatively, you might encounter a bug and fix it. In both scenarios, you need a system that notifies your existing clients to upgrade their current app to the new version or update the bug, similar to how platforms like WordPress, Code Editors, and Operating Systems handle it. By integrating this feature, you can achieve your desired outcome.



### Minimum Requirements
- PHP Version >= 7.4
- Laravel Version >= 8

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

### config/auto_update.php
![auto_update.php](https://snipboard.io/OuNIDK.jpg)

<br>

### Environement Variable (.ENV) Setting
```
PRODUCT_MODE=DEMO (or DEVELOPER or CLIENT)
VERSION=1.2.1
BUG_NO=1210 
```

### <i><b>Important Notes  </b></i> <br>

#### (i) PRODUCT_MODE :
- <b>DEVELOPER</b> : To access for developers.
- <b>CLIENT</b> : For production I mean when the clients use your application and they can get notification and update.
- <b>DEMO</b> : Client's product have to connect with a main server to transfer files and others from main server to client server. So there should be a primary server for this original products of a comapany/organization/personal. 
- If you want you can customize the attributes.

#### (ii) For Version Upgrade - you should follow these point for DEMO :

- Client Version Number >= Minimum Required Version
- In general setting, Latest Version Upgrade should be <b><i>Checked</i></b>
- Product Mode  have to set <b><i>DEMO</i></b>
- Demo Version Number > Client Version Number

#### (iii) For Bug Update - you should follow  these point in DEMO :

- Client Version Number >= Minimum Required Version
- Demo Version Number === Client Version Number
- Demo Bug Number > Client Bug Number
- In general setting, bug update should be <b><i>Checked</i></b>
- Product Mode have to set <b><i>DEMO</i></b>




<br>

<div align="center">
    <h2>Developer Section</h2>
    <p>(This section will be disabled for the clients)</p>
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
- In <b>Short Note</b> section, you can set a important note for the clients if need.

![Version Upgrade Setting](https://snipboard.io/i1tBSJ.jpg)

### Bug Update Setting

- Similar as like <b>Version Upgrade Setting</b>.


![bug Upgrade Setting](https://snipboard.io/jCdwKe.jpg)

<br>

<div align="center">
    <h2>Client Section</h2>
</div>


### Client Dashboard (if version upgrade related)
- Goto the url to access: [your_domain_name.com/dashboard]()
- If any new version release, then client will get a notification message in dashboard. They have to click on <b><i>Click Here</i></b> option to see the details page. 

![Version Upgrade Notification](https://snipboard.io/dxfblN.jpg)

### Version Upgrade Page

- Client will see all details such version number, note and change log details.

![Version Upgrade Page](https://snipboard.io/W5HBkf.jpg)

- After clicking Upgrade button, it will upgrade process automatically then will see a success message and new version number will setup in your application automatically.

![Version Upgrade page](https://snipboard.io/VDHoXi.jpg)

<i><b>Some Challenge : </b></i> <br>
- If any issues arise, then clients have to contact with the support team. 

![Version Upgrade Error](https://snipboard.io/7W46AY.jpg)


### Client Dashboard (if bug update related)
- Goto the url to access: [your_domain_name.com/dashboard]()
- If any bug found, then client will get a alert notification message in dashboard. They have to click on <b><i>Click Here</i></b> option to see the details page. 

![Bug Update Setting](https://snipboard.io/wKyWc7.jpg)

- Client will see change log and  short note (if needed) details.

![bug update Page](https://snipboard.io/Blwio7.jpg)


- After clicking update button, it will update process automatically then will see a success message.

![bug update page](https://snipboard.io/2kBIhW.jpg)

<i><b>Some Challenge : </b></i> <br>
- If any issues arise, then clients have to contact with the support team. 

![Version Upgrade Error](https://snipboard.io/9LevBw.jpg)

