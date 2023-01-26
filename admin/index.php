<?php 
    require_once("inc/header.php");
    require_once("inc/navigation.php");


    if(isset($_GET['homepage']))
    {
        require_once("inc/homepage.php");
    }else if(isset($_GET['addElectionPage']))
    {
        require_once("inc/add_elections.php");
    }else if(isset($_GET['addCandidatePage']))
    {
        require_once("inc/add_candidates.php");
    }else if (isset($_GET['poll'])) 
    {
        require_once("inc/add_poll.php");
    } else if (isset($_GET['survey'])) 
    {
        require_once("add_survey.php");
    }else if(isset($_GET['viewResult']))
    {
        require_once("inc/viewResults.php");
    }

?>


<?php 
    require_once("inc/footer.php");
?>