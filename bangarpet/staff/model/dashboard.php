
      <?php $page = isset($_GET['page']) ? $_GET['page']:'home' ?>
            <?php
            $title = isset($_GET['page']) ? ucwords(str_replace("_", ' ', $_GET['page'])) : "home";
             ?>
            <?php 
            if(!file_exists('./model/pages/'.$page.".php")){
              include './404.html';
            }else{
            include './model/pages/'.$page.'.php';
            }
          ?>
            <!-- menu active function -->
            <?php
// function active($currect_page){
//     $url= isset($_GET['page']) ? $_GET['page']:'dashboard_main';
//   if($currect_page == $url){
//       echo "style='background-color:#4c7e80;'"; //class name in css 
//   } 
// }
?>