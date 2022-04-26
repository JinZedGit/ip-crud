<h1>Ip-crud</h1>
<p>A small web CRUD application for creating, reading, updating and deleting entries from a list with host names, IP and MAC adresses.</p>
<h2>How it works?</h2>
<p>It's a simple CRUD application. It accepts data given in certain ways:</p>
<ul>
  <li>Hostname has a sepcific convention, since it was made for the needs of my current work place. It always requires "U" with the number 1 or 2, standing for the corespnding building the device is in, followed by "-" and the letter "R" standing for the room the device is in and the nubmer of the room, requiring 3 digits, starts with 0 if the number is just 2 digits, followed by "-" and then the nubmer of the device, requiring 2 digits, starts with 0 if the number is just 1 digits;</li>
  <li>Vaild IP Adress;</li>
  <li>Valid MAC Adress;</li>
</ul>
<p>All fields have to be unique, otherwise the entry won't be added.</p>
<p>The filter/search shows fields that CONTAINS the input in the filter/search input.</p>
<h2>Bulk option.</h2>
<p>The bulk options requires host, ip, mac to be comma separated and all seprate entreis to be new line separated. Easiest way to do this would be to crate an Excel table where the first column has all the host names, second one has all the IP Adresses and the third all the MAC adresses. Export the table as a .csv file, open it as text with Notepad or Notepad++, come it's entire content and paste it in the bulk field.</p>
