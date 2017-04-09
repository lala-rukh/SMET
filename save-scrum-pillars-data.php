<?php
    $process_in_organization = $_POST['process_in_organization']; 
    $no_of_figures_process = $_POST['no_of_figures_process']; 
    $no_of_sections_process = $_POST['no_of_sections_process']; 
    $no_of_tables_process = $_POST['no_of_tables_process'];
    $conflict_resolution_process_exists = $_POST['conflict_resolution_process_exists']; 
    $def_of_done = $_POST['def_of_done']; 
    $def_of_done_communication = $_POST['def_of_done_communication']; 
    $progress_sprint_goal = $_POST['progress_sprint_goal'];
    $scrum_adapted = $_POST['scrum_adapted'];
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "smet_core_database";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sth = $conn->prepare("INSERT INTO scrum_pillars(project_id, is_processes_exist, no_of_figures_process, no_of_tables_process, no_of_sections_process, is_process_shared, is_def_of_done_exists, communication_def_of_done, inspect_progress_sprint_goal, scrum_adapted, is_deleted, created_date) 
        VALUES ('12345',:process_in_organization,:no_of_figures_process,:no_of_tables_process,:no_of_sections_process,:conflict_resolution_process_exists,:def_of_done,:def_of_done_communication,:progress_sprint_goal,:scrum_adapted,0,now())");
        $sth->bindParam(':process_in_organization', $process_in_organization, PDO::PARAM_INT);
        $sth->bindParam(':no_of_figures_process', $no_of_figures_process, PDO::PARAM_INT);
        $sth->bindParam(':no_of_tables_process', $no_of_tables_process, PDO::PARAM_INT);
        $sth->bindParam(':no_of_sections_process', $no_of_sections_process, PDO::PARAM_INT);
        $sth->bindParam(':conflict_resolution_process_exists', $conflict_resolution_process_exists, PDO::PARAM_INT);
        $sth->bindParam(':def_of_done', $def_of_done, PDO::PARAM_INT);
        $sth->bindParam(':def_of_done_communication', $def_of_done_communication, PDO::PARAM_STR, 12);
        $sth->bindParam(':progress_sprint_goal', $progress_sprint_goal, PDO::PARAM_STR, 12);
        $sth->bindParam(':scrum_adapted', $scrum_adapted, PDO::PARAM_STR, 12);
        $sth->execute();

        echo "New record created successfully";
        }
    catch(PDOException $e)
        {
			//echo $e->getMessage();;
        echo $sql . "<br>" . $e->getMessage();
        }

    $conn = null;
?>