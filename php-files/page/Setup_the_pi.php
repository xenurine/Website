<?php
// Put Var Here //
$Title    = "Startup Guides";
$Header   = "Setting Up Your Raspberry PI";
$SubHead  = "A step by step guide into how to setup your pi";

function body () {
?>

<!-- HTML HERE -->
<p> This Guide will show you how to setup the raspbery pi </p>
<h2> You Will Need  </h2>
<aside class="content">
  <p><b> Contents </b></p>
  <dl>
    <dt>1 <a href="#1"> Getting Started </a></dt>
    <dt>2 <a href="#2"> Setup the SD card </a></dt>
    <dt>3 <a href="#3"> Install the OS  </a></dt>

  </dl>
</aside>
<ul>
  <li> Raspberry Pi </li>
  <li> A Micro SD Card (at least 8 GB) </li>
  <li> USB Keyboard and Mouse </li>
  <li> Micro USB charging cable </li>
  <li> HDMI Cable </li>
  <li> ethernet cable (optinal) </li>
  <li> Monitor or TV </li>
  <li> A Computer with an internet connection </li>
  <li> SD card Reader and Micro SD card Adaptor </li>
</ul>

<h2 id="1"> Getting Started </h2>
<p>Before you power up the Raspberry pi, an operating system is needed to make
   the Raspberry Pi Work. To do this you will need to visit the Raspberry Pi
   Website and Download one of the operating systems. The Two best Operating
   Systems are <a href="https://www.raspbian.org/" target="/blank">“Raspbian”</a>
   and <a href="https://ubuntu-mate.org/about/" target="/blank">"Ubuntu Mate"</a>.
  </p>

<h3> Raspbian </h3>
<p> Raspbian is based if Debian and is Optimised for the Raspberry Pi. </p>
<a href="https://www.raspberrypi.org/downloads/raspbian/" class="button">Download</a>
<p> * Links to www.raspberrypi.org </p>
<br />
<h3> Ubuntu Mate </h3>
<p> Ubuntu mate is based if Ubuntu and uses the Mate Desktop envioment.
    It also has a build for the Optimised for the Raspberry Pi.</p>
<a href="https://ubuntu-mate.org/raspberry-pi/" class="button">Download</a>
<p> * Links to www.ubuntu-mate.org </p>
<br />

<h2 id="2"> Setup the SD card </h2>

<p> When you have downloaded the OS you will need to write the file to your
  Micro SD card. To do this you will need some Disk Imaging Software. </p>

  <p> &#10043;  TIP - Remove all USB Flash Drives from your computer so you don’t
      accidentally format them  </p>
<h3> GNU/Linux </h3>
<ol>
	<li> Extract the file you have just downloaded </li>
	<li> Right Click on the “.img" file you just extracted </li>
	<li> Depending on your Distribution choose image writer or bootable USB </li>
  <li> Select the SD Card (Warning This will fomat your SD Card ) </li>
  <li> Write the image to the SD Card </li>
  <li> Safely remove the SD card </li>
</ol>

<h3> MS Windows </h3>
<p> Before you Start you will need to download 7-Zip and Win32 Image Writer </p>
<p> &#9998; NOTE - If the download is a .zip file you will dont need 7-Zip </p>
<a href="http://www.7-zip.org/" class="button">7-Zip</a>
<a href="https://sourceforge.net/projects/win32diskimager/" class="button">Win32</a>
<p> * Links to www.7-zip.org &  www.sourceforge.net </p>
<ol>
	<li> Extract the file you have just downloaded with 7-Zip  </li>
	<li> Open Win 32 writer </li>
	<li> Select the ".img" file you just extracted </li>
  <li> Select the SD Card (Warning This will fomat your SD Card ) </li>
  <li> Write the image to the SD Card </li>
  <li> Safely remove the SD card </li>
</ol>
<br />

<h2 id="3"> Install the OS </h2>

<p> When This is done you can now put the SD (Micro SD) Into your raspberry PI.
    When you plug in the power the Raspberry Pi should Boot into Linux
    (Remember to plug in the USB keyboard and Ethernet cable) </p>
<p> When the Pi boots up you will be prompted to logon. To do this just type
    the words in the "quotes".</p>
<p> Username: "pi" </p>
<p> Password: rasberry </p>
<p>	&#9998; NOTE - Linux will not show a * symbol when you type in the password </p>

<p> You Now have a fully working Raspbery Pi. </p>

<?php
}
?>
