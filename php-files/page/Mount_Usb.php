<?php
// Put Var Here //
$Title    = "Linux and Servers ";
$Header   = "Mount A Drive";
$SubHead  = "A step by step guide into how to mount a drive ";

function body () {
?>

<!-- HTML HERE -->
<p> This Guide will show you how to configure your raspbery pi </p>

<h2> You Will Need  </h2>
  <aside class="content">
    <p><b> Contents </b></p>
    <dl>
      <dt>1 <a href="#1"> Getting Started </a></dt>
      <dt>2 <a href="#2"> Getting Ready </a></dt>
      <dt>3 <a href="#3"> Mounting the Drive </a></dt>
      <dt>4 <a href="#4"> Mount with Fstab </a></dt>
    </dl>
  </aside>
  <ul>
    <li> Configured Raspberry Pi </li>
    <li> A USB Drive (with a file on it) </li>
    <li> SSH Software Like Putty </li>
    <li> HDMI Cable </li>
    <li> A computer concreted to the same network as the Pi </li>
    <li> Internet connection (optinal) </li>
  </ul>

  <h2 id="1"> Getting Started  </h2>

  <p> Connect your USB drive to one of the USB ports on the raspberry pi. make
      sure that it powers on by checking that the drive LED lights up. </p>
  <p> If you are using a Hard Disk Drive (HDD) or a Solid State Drive (SSD) ,
      your drive will not start. This is because it needs more power. Simply
      power the drive with an external power supply. This means that both your
       Raspberry Pi and HDD/SSD are plugged into the mains power supply. </p>
  <p> Download putty and run putty. When it is running put in your raspberry
      Pi Internet Protocol (IP) in the “Host Name (or IP address)” box. Also
      make sure that the port is “22” </p>
  <p> When you are done press "Open" </p>
  <p> Log onto your pi</p>

  <h2 id="2"> Getting Ready to Mounting the Drive </h2>

  <p> First we need to see if the pi has detected the USB stick.  </p>

  <p> To do this remove the USB drive if its connected to the pi and type the command shown below  </p>

  <code> tail -f /var/log/messages </code>

  <p> You should seem some text with dates art the start </p>
  <p> If you plug in your USB drive some new text should appear </p>
  <p> In the new text you sould see something like this; </p>

  <code>
    raspberrypi kernel: [9410.357896] sd 4:0:0:0: [sda] Write Protect is off <br />
    raspberrypi kernel: [9410.357896] sd 4:0:0:0: [sda] Write cache: disabled <br />
    raspberrypi kernel: [9410.357896] sda: sda1 <br />
    raspberrypi kernel: [9410.357896] sd 4:0:0:0: [sda] Attached SCSI removable disk <br />
  </code>
  <p> This may look a bit different to yours </p>
  <p>  As you can see the USB drive has been assigned to sda1 make note of this
       since you need to use this to mount the disk </p>

  <h2 id="3"> Mounting the Drive </h2>

  <p> Now you need to tell the pi where to mount the drive to. If you want to
      mount it to the Apache web server change your directory to the web server
      with the command below  </p>

  <code> cd /var/www </code>

  <p> You use the cd command to change the directory </p>

  <p> Now we need to make a directory for the drive. to do this we need to give
      it a name. for this tutorial we are going to name it "storage". </p>

  <p> to make the drive type in this command; </p>

  <code> sudo mkdir storage </code>

  <p> &#9998; NOTE - You can put what ever you want where it says "storage".
      make sure it has no spaces in the name </p>

  <p> Now lets mount the drive by using this command; </p>

  <code> sudo mount -t vfat -o uid=pi,gid=pi /dev/sda1 /var/www/storage </code>

  <p> &#9998; NOTE - The end part "/var/www/storage" is where the drive is going
     to be mounted to. you can change this to another directory. Also the
      "/dev/sda1" part is what the USB drive is allocated to. </p>

  <p> now go onto your new directory as seen below </p>

  <code> cd storage </code>

  <p> if you have files on your USB drive type the command below; </p>

  <code> ls </code>

  <p> if you see the files you have mounted the USB drive </p>



  <h2 id="4"> Mount with Fstab </h2>


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
