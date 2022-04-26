<?php 
        function Read(){
            require_once('dbconn.php');
            
            $sql = "SELECT id, name, ip, mac from list ORDER BY name";

            $result = mysqli_query($conn, $sql);
            
            $number_of_results = mysqli_num_rows($result);
            $results_per_page = 20;
            $number_of_pages = ceil($number_of_results/$results_per_page);
            

            if(!isset($_GET['page'])){
                $page = 1;
            }else{
                $page = $_GET['page'];
            }

            $start_limit = ($page-1) * $results_per_page;

            if($_POST){
                $search = $_POST['filterInput'];
            }

            if(isset($search)){
                $sql = "SELECT * FROM list WHERE name LIKE '%$search%' OR ip LIKE '%$search%' OR mac LIKE '%$search%' ORDER BY name LIMIT $start_limit, $results_per_page";
            }else{
                $sql = "SELECT id, name, ip, mac from list ORDER BY name LIMIT $start_limit, $results_per_page";
            }

            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_array($result)){
                echo "<td>" . $row["name"] . "</td><td>" . $row["ip"] . "</td><td>" . $row["mac"] . "</td><td>
                <a href=\"controllers/updatePreview.php?id=". $row["id"] ."\" class=\"btn btn-outline-warning px-2 py-1\"><i class=\"bi bi-pencil-fill\"></i></a><a onclick=\"return confirm('Are you sure you want to delete this row?')\" href=\"controllers/delete.php?id=". $row["id"] ."\" class=\"btn btn-outline-danger px-2 py-1 mx-1\"><i class=\"bi bi-trash\"></i></a></td></tr>";
            }
            echo "</table>";

            include('pagination.php');
            $conn-> close();     
        }
?>