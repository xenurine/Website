<?php
// Put Var Here //
$Title    = "Startup Guides";
$Header   = "Configure Your Raspberry PI";
$SubHead  = "A step by step guide into how to configure your pi ";

function body () {
?>

<!-- HTML HERE -->
<p> This Guide will show you how to configure your raspbery pi </p>

<h2> You Will Need  </h2>
  <aside class="content">
    <p><b> Contents </b></p>
    <dl>
      <dt>1 <a href="#1"> Getting Started </a></dt>
      <dt>2 <a href="#2"> Expand the File system </a></dt>
      <dt>3 <a href="#3"> Change Default Password </a></dt>
      <dt>4 <a href="#4"> Setting Up SSH </a></dt>
      <dt>5 <a href="#5"> Connecting Via SSH </a></dt>
      <dt>6 <a href="#6"> Install FTP Server </a></dt>
      <dt>7 <a href="#7"> Connecting Via FTP </a></dt>
    </dl>
  </aside>
  <ul>
    <li> Configured Raspberry Pi </li>
    <li> USB Keyboard and Mouse </li>
    <li> Micro USB charging cable </li>
    <li> HDMI Cable </li>
    <li> ethernet cable  (optinal) </li>
    <li> Monitor or TV </li>
    <li> Internet connection (optinal) </li>
  </ul>

  <h2 id="1"> Getting Started  </h2>

  <p> Power up the Pi and type in the username and password.</p>
  <p> Username: "pi" </p>
  <p> Password: rasberry </p>
  <p>	&#9998; NOTE - Linux will not show a * symbol when you type in the password </p>

<h2 id="2"> Expand the File system </h2>

  <p> It is important to expand the file system so that it takers up the whole SD
    card. to do this type the following command; </p>

  <code>  sudo raspi-config  </code>

  <p> This will open the raspberry pi's Config. </p>

  <aside>
    <img src="img/guides/config_pi-01.png" width=100%; alt="The Raspbery Pi Config (Expand Filesystem highlighted)"/>
    <p> The Raspberry Pi Config </p>
  </aside>

  <p> Use the down arrow Keys to to move to "Expand Filesystem"
    (which is the first option) when this option is highlighted press enter to
    select it. you will prompted that you are going to expand the file system
    press enter to continue. After this the raspberry pi is using all of the
    space on the SD card. </p>

  <h2 id="3"> Change Default Password </h2>

  <p> It is Important to change the password on the raspberry pi due to secure
      reasons. To Chnage the default password type the following command </p>

  <code> sudo passwd <b>pi</b> </code>
  <p>	&#9998; NOTE - Chnage the text in bold to your username </p>
  <p> after typing in this you will need to type in your excising password then
    your will be prompted to type in your new password. after this you will be
    asked to retype the new password again. After this you have successfully
    changes your password </p>

<h2 id="4"> Setting Up SSH  </h2>

  <p> Its recommend to SSH into your Pi. This means that if you want to access
      your pi from any computer, which is on the same network to the pi. To do this
      type the flowing command </p>
  <code> This will open the raspberry pi's Config. </code>
  <p> This will open the raspberry pi's Config. </p>
  <aside>
    <img src="img/guides/config_pi-03a.png" width=100%; alt="The Raspbery Pi Config (Advanced Options highlighted)"/>
    <p> The Raspberry Pi Config, with Advanced Options highlighted </p>
  </aside>
    <p> Use the down arrow Keys to to move down to "Advanced options" (which is the
        second option at the bottom) when this option is highlighted press enter to
        select it. </p>
  <aside>
  <img src="img/guides/config_pi-03b.png" width=100%; alt="The Raspbery Pi Config (SSH highlighted)"/>
  <p> The Raspberry Pi Config, with SSH highlighted </p>
  </aside>
  <p> When your are in the advance options go to "SSH" and enable it. when this
      is done press the right arrow key until "Finish" is highlighted. </p>

  <p> Now you will need to find the internal IP address is. To do this you need
      to use the following command. However for this to work your pi needs to be
      connected to the internet</p>

  <code> ifconfig </code>

  <p> when you type this command in you should see the flowing thing </p>

  <code>
    eth0 &nbsp;&nbsp;&nbsp; Link encap:Ethernet HWaddr b8:27:eb:af:a0:88 <br />
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; inet <b> addr:192.168.0.17 </b> Bcast:192.168.0.255 Mask:255.255.255.0
  </code>

  <p> what we need to look at is the "inet addr:192.168.0.17" (shown in bold.
      it is recomended to make note of this since it is needed to SSH into
      your PI </p>

  <p> You can now remove the Mouse and Keyboard from the raspberry pi, because we
     can SSH into the pi via a computer which is in the same network </p>

<h2 id="5"> Connecting Via SSH </h2>

  <p> You can now connect to your raspbery pi via SSH. To do this you need a SSH
      Client. </p>
  <br />
  <h3> GNU/Linux </h3>
    <p> Type the following Command </p>
    <code> ssh pi@<b>192.168.0.17</b></code>
    <p>	&#9998; NOTE - Change the text in bold to your ip address </p>
    <p> When you hit enter you will be asked for your password. type the password
        you have chnaged it to </p>

    <br />
  <h3> MS Windows </h3>
    <p> You will need to download a SSH Client. We recommend Putty , which is a
        free SSH client. <p>
    <a href="https://www.chiark.greenend.org.uk/~sgtatham/putty/" class="button">Putty</a>
    <p> * Links to www.chiark.greenend.org.uk </p>
    <p>  After you have installed the program open it and type in the local IP
         address of the raspbery pi . then click to connect to the raspberry pi.
         (for this to work the computer has to be connected to the same network )</p>
   <aside>
     <img src="img/guides/config_pi-04.png" width=100%; alt="How to fill in the server infomation for Putty"/>
     <p> How to fill in the server infomation for putty </p>
   </aside>
    <p> When you press open you will be asked to type in your logon details. for
        username type "pi" for password he password you have chnaged it to </p>


<h2 id="6"> Install FTP Server  </h2>

  <p>  An FTP server (File Transfer protiole) is a good way to send files from
     and to the raspberry pi. To do this you need to use the folowing command; </p>
  <code> sudo apt-get install vsftpd </code>

<h2 id="7"> Connecting Via FTP </h2>
  <p> you can now accsess the files on your raspbery pi via FTP. to do this you need to have a FTP Client. </p>
  <p> You will need to download a FTP Client. We recommend filezilla , which is a
    free FTP client. <p>
  <a href="https://filezilla-project.org/" class="button">filezilla</a>
  <p> * Links to www.filezilla-project.org </p>
  <p> if you use linux you can use the following command to download and install </p>
  <code> sudo apt-get install filezilla </code>
  <p> After you have installed the program open it and type in the local IP
      address of the raspbery pi, username, password and set the port to 22.
  <aside>
    <img src="img/guides/config_pi-05.png" width=100%; alt="How to fill in the server infomation for filezilla"/>
    <p> How to fill in the server infomation for filezilla </p>
  </aside>
    <p> when you press connect filezilla will connect to the raspbery pi. </p>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />


<?php
}
?>
