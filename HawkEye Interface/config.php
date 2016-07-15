<?php
///////////////////////////////////////////////////
//         HawkEye Interface Config File         //
//                 by oliverw92                  //
///////////////////////////////////////////////////
//     Edit the config array below with your     //
//     details. Make sure all strings are        //
//     escaped. If you can't work this out,      //
//     ask in the thread on bukkit.org.          //
///////////////////////////////////////////////////
$hawkConfig = array(
    //Enter your MySQL database information
    //Do not change 'dbTable'
    "dbHost"  => "localhost:3306",
    "dbDbase" => "minecraft",
    "dbUser"  => "root",
    "dbPass"  => "",
    "dbTable" => "hawkeye",
    "dbPlayerTable" => "hawk_players",
    "dbWorldTable" => "hawk_worlds",

    //Set this to the password you want people to have to use to access the interface
    //Leave blank for no password
    "password" => "",

    //Default radius to search for if user supplies a location
    "radius" => 30,

    //Limit the maximum number of results that can be returned. Do not use quotes
    //Set to 0 for no limit
    "maxResults" => 0,

    //Language pack - default is english.php
    //You can create your own based off the english.php file,
    //then change the name below to your language file name
    "langFile" => "english.php",

    //Log queries to log.txt
    //Useful to keep track of who is querying what
    "logQueries" => true,

    //Use forum for authentication?
    //Default is false
    "forumAuth" => false,

    //The relative location for the forum to this file.
    //Default is "../forum/"
    "forumDir" => "../forum/",

    //The type of forum that will be used.
    //Default is phpbb3
    //Available types are: phpbb3 and smf
    "forumType" => "phpbb3",
    
    // Should SSL (https) be enforced?
    // A good idea but but only works if your web server has SSL configured.
    // NOTE: This feature properly supports websites behind CloudFlare.
    "forceSsl" => false
);
