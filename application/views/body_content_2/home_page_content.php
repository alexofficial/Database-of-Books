<body>

<div class="container-fluid">
  <div class="row content">
    <div class="col-sm-3 sidenav">
      
      <h4>Βάση Βιβλίων</h4>
      
      <ul class="nav nav-pills nav-stacked">
        
        <li class="active"><a href="#section1">Αρχική</a></li>
        <li><a href="#section2">Βιβλία</a></li>
        <li><a href="#section3">Συγγραφείς</a></li>
        <li><a href="<?php echo base_url() ?>Home/add_new_book_view">Προσθέστε Βιβλίο</a></li>
        
      </ul><br>
      
      <div class="input-group">
        
        <input type="text" class="form-control" placeholder="Αναζήτηση">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>

    <div class="col-sm-9">
    <h4><small>Λίστα Βιβλίων</small></h4>
     
    </div>
  </div>
</div>

<footer class="container-fluid">
  <p>Footer Text</p>
</footer>

</body>
</html>
