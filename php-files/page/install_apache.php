<?php
// Put Var Here //
$Title    = "Linux and Servers ";
$Header   = "Installing a Webserver ";
$SubHead  = "A step by step guide into install a web server";

function body () {
?>
<!-- HTML HERE -->
<p> This Guide will show you how install Apache and PHP </p>
<h2> You Will Need  </h2>
<aside class="content">
  <p><b> Contents </b></p>
  <dl>
    <dt>1 <a href="#1"> Getting Started </a></dt>
    <dt>2 <a href="#2"> Installing Apache </a></dt>
    <dt>3 <a href="#3"> Installing PHP  </a></dt>

  </dl>
</aside>
<ul>
		<li><p>SSH Software Like Putty</p></li>
		<li><p>FTP Software Like Filezilla</p></li>
		<li><p>A computer concreted to the same network as the PI</p></li>
</ul>

<h2 id="1"> Getting Started </h2>
<p> To make a web server you need apache2 and PHP. <p>

<h2 id="2"> Installing Apache </h2>

<p> First you need to check to see if the repository is up to date. Type the
    following command </p>

<code> sudo apt-get update </code>

<p> Then Install apache 2 </p>

<code> sudo apt-get install apache2 </code>

<p> Now you you need to test to see if apache is running. To do this we need
    to find the IP address of the system. Type the following command. </p>

<code> If config </code>

<p> when you type this command in you should see the flowing thing </p>

<code>
  eth0 &nbsp;&nbsp;&nbsp; Link encap:Ethernet HWaddr b8:27:eb:af:a0:88 <br />
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; inet <b> addr:192.168.0.17 </b> Bcast:192.168.0.255 Mask:255.255.255.0
</code>

  <p> Make note of the ip address (shown in bold) </p>
  <p> Type in the IP address (shown in bold) into the web browser. </p>

<code> 192.168.0.17 </code>

<p> You should get the following result </p>

<aside>
<img src="img/guides/install_apache-01.png" width=100%; alt="Apache It Works Page"/>
<p> Apache It Works Page </p>
</aside>

<p> Apache is now installed </p>

<h2 id="3"> Install PHP </h2>

<p> To install PHP type the following command </p>

<code> sudo apt-get install php libapache2-mod-php php-mcrypt </code>

  <p> when you have installed PHP you will need to reset apache2 with the
      following command </p>

  <code> sudo service apache2 restart </code>

<p> To make sure that PHP has installed correctly type the following command
    to create a file </p>

<code> sudo nano /var/www/html/info.php </code>

<p> Type the following things to the new file <p>

<code>
  &lt;?php <br />
  &nbsp;&nbsp;&nbsp;phpinfo(); <br />
 ?&gt;
</code>

<p> When you have typed the text above save the file </p>

<p> Type in the IP address (highlighted in yellow into the web browser. </p>

<code> 192.168.0.17/info.php </code>

<p> You should get the following result </p>

<aside>
<img src="img/guides/install_apache-02.png" width=100%; alt="PHP It Works Page"/>
<p> PHP overview page </p>
</aside>

<p> When you have finished looking at the file type the following command.
  This will remove the file you just created </p>

<code> sudo rm /var/www/html/info.php </code>


<?php
}
?>
