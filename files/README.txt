            //--------------------------------------------------------------------//
           // SimpleShare                                                        //
          //                                                                    //
         // Created by Chaottiic                                               //
        //                                                                    //
       // Information:                                                       //
      //                                                                    //
     // Discord - Chaottiic#4088                                           //
    // Email - email@chaottiic.com                                        //
   // Website - https://chaottiic.com                                    //
  // Support Guild - https://chaottiic.com/discord                      //
 //                                                                    //
//--------------------------------------------------------------------//
Documentation:

1. Extract the files to your desktop.
2. Edit settings.php to your liking.
3. Copy the files to your Web Server of choice.


SimpleShare Settings.php
- Directories 
  - Directory: 
    - Set this to "NONE" if you are using SimpleShare like i.chaottiic.com/file
    - Set this to "string" if you are using SimpleShare like i.chaottiic.com/string/file
  - File Directory
    - Set this to "" if you do not have a file directory.
    - Set this to "files/" if you have a "files" directory. 
      - These directories have only been tested to be any one word string.
  - Template Directory
    - Set this to "templates/default" for you preferred templates.
      - We suggest keeping the default template as a backup. 
      - You can find more templates within the discord above.
- Common Settings
  - Color
    - Please include # within the string of said HEX Color. 
  - URL
    - This will be your domain URL, this is used within the templates to redirect home, and to the original file. 
  - Name
    - This is used within the template, in the title and more areas.
  - Logo
    - This is used in the top left corner, and on certain embeds within the template.
  - No Image
    - This is used when there is nothing found, a common 404 picture.
  - Files
    - Set to "strict" if you'd like same commonly named files to be sent to 404 without extension. 
      - Example, if there is a README.txt and a README.log. Going to i.chaottiic.com/README will show 404.
    - Set to "soft" to show the first grabbed commonly named file without an extension. 
      - Example, if there is a README.txt and a README.log. Going to i.chaottiic.com/README will show README.txt. (Random)

ShareX Settings
- Task Settings*
  - File Naming
  - %rx%rx%rx%rx%rx%rx (Name Patterns) *
- Destinations
  - Destination Settings
    - FTP / FTPS / SFTP
      - Remove file extension from URL Path | Yes
        - URL Preview: https://simpleshare.example.com/example

* Optional
SimpleShare Doesn't work?

1. Make sure .htaccess is uploaded, and configured properly.
2. Embeds are not showing up; Oh no! Please check the source in Google Chrome or Firefox to see the URL. That should help, if not please contact us! (Above)