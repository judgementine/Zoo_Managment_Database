<p> </p>
<p>Shops Report</p>
<p> </p>
<p>{source}</p>
<p>&lt;!DOCTYPE html&gt;</p>
<p>&lt;head&gt;</p>
<p>&lt;style&gt;</p>
<p>table{</p>
<p>border-style:solid;</p>
<p>border-width:<span class="hljs-number">2</span>px;</p>
<p>border-color:blue;</p>
<p>border-collapse:collapse;</p>
<p>}</p>
<p>th{</p>
<p>background-color:green;</p>
<p>Color:white;</p>
<p>}</p>
<p>th,td</p>
<p>{ width:<span class="hljs-number">150</span>px;</p>
<p>text-align:center;</p>
<p>border:<span class="hljs-number">1</span>px solid black;</p>
<p>padding:<span class="hljs-number">5</span>px;</p>
<p>} body{</p>
<p>background-color:<span class="hljs-comment">#EEFDEF";</span></p>
<p>}</p>
<p>&lt;/style&gt;</p>
<p>&lt;/head&gt;</p>
<p> </p>
<p> </p>
<p> </p>
<p> </p>
<p>&lt;?php<br />$servername = "team9-zoo-database-57.c3gzznnyeksn.us-east-2.rds.amazonaws.com";<br />$username = "admin";<br />$password = "T3Am9Pasw0rd$";<br />$dbname = "zoodb";</p>
<p>// Create connection<br />$conn = new mysqli($servername, $username, $password, $dbname);<br />// Check connection<br />if ($conn-&gt;connect_error) {<br />die("Connection failed: " . $conn-&gt;connect_error);<br />}</p>
<p>$sql = "SELECT * FROM Shops";<br />$result = $conn-&gt;query($sql);</p>
<p>if ($result-&gt;num_rows &gt; 0) {<br />// output data of each row<br />echo '&lt;table&gt;';<br />echo '&lt;tr&gt;';<br />echo ' &lt;th&gt; Name&lt;/th&gt;';<br />echo ' &lt;th&gt; Schedule&lt;/th&gt;';<br />echo ' &lt;th&gt; items&lt;/th&gt;';</p>
<p>echo ' &lt;th&gt; item_name&lt;/th&gt;';</p>
<p>echo ' &lt;th&gt; item_price&lt;/th&gt;';</p>
<p>echo ' &lt;th&gt; number_of_sales &lt;/th&gt;';</p>
<p><br />echo '&lt;/tr&gt;';</p>
<p> </p>
<p> </p>
<p>while($row = $result-&gt;fetch_assoc()) {</p>
<p>echo "&lt;tr&gt;";</p>
<p>echo "&lt;td&gt;".$row['Name']."&lt;/td&gt;";</p>
<p>echo "&lt;td&gt;".$row['Schedule']."&lt;/td&gt;";</p>
<p>echo "&lt;td&gt;".$row['items']."&lt;/td&gt;";</p>
<p>echo "&lt;td&gt;".$row['item_name']."&lt;/td&gt;";</p>
<p>echo "&lt;td&gt;".$row['item_price']."&lt;/td&gt;";</p>
<p>echo "&lt;td&gt;".$row['number_of_sales']."&lt;/td&gt;";</p>
<p> </p>
<p>}</p>
<p> </p>
<p> </p>
<p>echo '&lt;/table&gt;';<br />} else {<br />echo "0 results";<br />}<br />$conn-&gt;close();<br />?&gt;</p>
<p>{/source}</p>
