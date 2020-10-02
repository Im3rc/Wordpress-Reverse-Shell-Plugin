# Wordpress Reverse Shell Plugin
A simple php script you can upload as a plugin on a Wordpress site and get a reverse shell.

## Usage 
- Change the IP address and the Port in the script as per required
- Convert the php file to a zip 
>>
     zip shell.php shell-plugin.php
- Upload the zip file as a plugin
  - If the upload is successful, you get a **plugin is installed** message 
- Listen on the specified port using netcat    
- Activate the plugin 
