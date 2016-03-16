<?php

        /* 
        * Παρακάτω εκχωρούνται στις μεταβλητές τα attributes για τα περιεχόμενα της φόρμας.
        */
        $attributes_title = array('name' => 'title','placeholder' => 'Τίτλος', 'maxlength'=>'50');
        $attributes_author = array('name' => 'author','placeholder' => 'Συγγραφέας', 'maxlength'=>'50');
        $attributes_publisher = array('name' => 'publisher','placeholder' => 'Εκδότης', 'maxlength'=>'50');
        $attributes_ISBN = array('name' => 'ISBN','placeholder' => 'ISBN', 'maxlength'=>'50');
        $attributes_language = array('name' => 'language','placeholder' => 'Γλώσσα', 'maxlength'=>'50');
        $attributes_translated  = array('name' => 'translated');
        $attributes_men  = array('name' => 'men','placeholder' => 'Ανδρικοί ρόλοι', 'maxlength'=>'50');
        $attributes_women  = array('name' => 'women','placeholder' => 'Γυναικείοι ρόλοι', 'maxlength'=>'50');
        $attributes_total_roles = array('name' => 'total_roles','placeholder' => 'Σύνολο ρόλων', 'maxlength'=>'10');
        $attributes_summary = array('name' => 'summary','placeholder' => 'Περίληψη');
        $attributes_comments = array('name' => 'comments','placeholder' => 'Σχόλια');
        $attributes_type_of_projects = array('name' => 'type_of_projects','placeholder' => 'Τύπος Έργου', 'maxlength'=>'50');
        $attributes_status = array('name' => 'status','placeholder' => 'Κατάσταση', 'maxlength'=>'50');
        $attributes_link = array('name' => 'link','placeholder' => 'Ιστότοπος', 'maxlength'=>'150');
        
        
       
        
        
       
echo form_open('Home/add_new_book');
       
       echo "<h1><center>Εισαγωγή Νέου Βιβλίου</center></h1>";
       echo '<td><center>';
       echo form_input($attributes_title);
       echo '</center></td>';
       echo '<td><center>';
       
//       echo "Συγγραφέας";
       echo '<td><center>';
       echo form_input($attributes_author);
       echo '</center></td>';
       echo '<td><center>';
       
//       echo "Εκδότης";
       echo '<td><center>';
       echo form_input($attributes_publisher);
       echo '</center></td>';
       echo '<td><center>';
      
      // echo "ISBN";
       echo '<td><center>';
       echo form_input($attributes_ISBN);
       echo '</center></td>';
       echo '<td><center>';
       
       //echo "Γλώσσα";
       echo '<td><center>';
       echo form_input($attributes_language);
       echo '</center></td>';
       echo '<td><center>';
       
       //echo "Ανδρικοί ρόλοι";
       echo '<td><center>';
       echo form_input($attributes_men);
       echo '</center></td>';
       echo '<td><center>';
       
       //echo "Γυναικείοι ρόλοι";
       echo '<td><center>';
       echo form_input($attributes_women);
       echo '</center></td>';
       echo '<td><center>';
       
       //echo "Σύνολο ρόλων";
       echo '<td><center>';
       echo form_input($attributes_total_roles);
       echo '</center></td>';
       echo '<td><center>';
       
       //echo "Περίληψη";
       echo '<td><center>';
       echo form_textarea($attributes_summary);
       echo '</center></td>';
       echo '<td><center>';
       
       //echo "Σχόλια";
       echo '<td><center>';
       echo form_textarea($attributes_comments);
       echo '</center></td>';
       echo '<td><center>';
       
       //echo "Τύπος Έργου";
       echo '<td><center>';
       echo form_input($attributes_type_of_projects);
       echo '</center></td>';
       echo '<td><center>';
       
       //echo "Κατάσταση";
       echo '<td><center>';
       echo form_input($attributes_status);
       echo '</center></td>';
       echo '<td><center>';
       
       //echo "Ιστότοπος";
       echo '<td><center>';
       echo form_input($attributes_link);
       echo '</center></td>';
       echo '<td><center>';

       
       
echo form_close();


    
?>

