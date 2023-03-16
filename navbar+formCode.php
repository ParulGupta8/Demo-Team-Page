

<style>
      .top_container {        border: 1px solid black;
        height: 85%;
        width: 100%;
        background: url("header.jpg") no-repeat;
        background-size: cover;
        background-position: 0% 33%;
        background-attachment: fixed;
      }
      .inner {
        height: 85vh;
      background-color: rgba(0, 0, 0, .2);

      }

    /* -------------NAVBAR---------------- */ 
    .navbar {
      background-color: rgba(0, 0, 0, .5);
    }
    .nav-link {
      font-weight: 500;
      margin: 0 .8rem;
    }
    .nav-link:hover {
      background-color: rgba(0, 0, 0, .6);
      border-radius: 5px;
    }
    .inner_content h5 {
      color: #003a5e; 
      font-weight: 500; 
      font-size: 1.5rem;
      text-shadow: 0 0 3px white;
      margin-bottom: 1rem;
    }
    .searchbar {
      width: 30rem;
    }
    .current_location {
      background-color: white;
      height: 2.5rem;
      width: 27rem;
      text-decoration: none;
      color: #003a5e;
      padding: 0.5rem 1rem;
      border-radius: 5px;
      margin-right: 3rem;
      display: none;
    }
    .current_location:hover {
      background-color: #003a5e;
      color: white;
    }
    .current_location span{
      padding-right: .7rem;
    }

/* ----------------MEDIA QUERY------------ */
@media(max-width: 550px) {
  /* .inner_content h3 {
    font-weight: 600;
    font-size: 1.5rem;
  } */
}

</style>



<script>
      function takeCurrentLocation(id) {
        document.getElementById(id).style.display="block";
      }
      function removeCurrentLocation(id) {
        document.getElementById(id).style.display="none";
      }
    </script>




  <!-- *******************NAVBAR******************** -->
      <nav class="navbar navbar-expand-lg ">
        <!-- --------navbar logo----- -->
        <a class="navbar-brand" href="#" style="display: flex; justify-content: center; align-items: center; height: 2rem; border: 1px solid black; margin-left: 1rem;"><img src="ss_logo.png" alt=""></a>
        <button class="navbar-toggler bg-light" style="margin-right: 1rem" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link text-light" href="#">Buy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Rent</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light" href="#">Sell</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Dropdown link
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>








  <div class="top_container">
    <div class="inner">
    <!-- **************TEXT + SEARCHBAR************** -->
    <div class="inner_content d-flex flex-column align-items-center" style=" border: 1px solid black; width: 100%; height: 89%; justify-content: center;">

      
    
<!-- **************************************FORM************************** -->
<div class="form" style="background-color: white; padding: 3rem;">
  
      <h5>Search By Location</h5>
  <!-- -----search bar---- -->
    <div class="searchbar d-flex">
          <input type="search" id="search" style="border: 1px solid #003a5e; padding: .5rem 1rem;" class="form-control" placeholder="Enter the location" onfocus="takeCurrentLocation('current_location')"  onfocusout="removeCurrentLocation('current_location')"/>
          <button type="button" class="btn btn-primary" style="padding: 0.5rem 1rem;">
        <i class="fas fa-search"></i>
        </button>
    </div>
             <a class="current_location" id="current_location" href="#"><span><i class="fa-sharp fa-solid fa-location-pin"></i></span> Take Current Location</a>


      <h5>Search By City</h5>
    <!-- ------------dropdown for states------ -->
    <div class="states_dropdown">
      <label for="state">Select State:</label>
      <select name="state" id="state" class="form-control" value="">
        <option value="">Select</option>
        <option value="Andhra Pradesh">Andhra Pradesh</option>
        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
        <option value="Assam">Assam</option>
        <option value="Bihar">Bihar</option>
        <option value="Chandigarh">Chandigarh</option>
        <option value="Chhattisgarh">Chhattisgarh</option>
        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
        <option value="Daman and Diu">Daman and Diu</option>
        <option value="Delhi">Delhi</option>
        <option value="Lakshadweep">Lakshadweep</option>
        <option value="Puducherry">Puducherry</option>
        <option value="Goa">Goa</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Haryana">Haryana</option>
        <option value="Himachal Pradesh">Himachal Pradesh</option>
        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
        <option value="Jharkhand">Jharkhand</option>
        <option value="Karnataka">Karnataka</option>
        <option value="Kerala">Kerala</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
        <option value="Maharashtra">Maharashtra</option>
        <option value="Manipur">Manipur</option>
        <option value="Meghalaya">Meghalaya</option>
        <option value="Mizoram">Mizoram</option>
        <option value="Nagaland">Nagaland</option>
        <option value="Odisha">Odisha</option>
        <option value="Punjab">Punjab</option>
        <option value="Rajasthan">Rajasthan</option>
        <option value="Sikkim">Sikkim</option>
        <option value="Tamil Nadu">Tamil Nadu</option>
        <option value="Telangana">Telangana</option>
        <option value="Tripura">Tripura</option>
        <option value="Uttar Pradesh">Uttar Pradesh</option>
        <option value="Uttarakhand">Uttarakhand</option>
        <option value="West Bengal">West Bengal</option>
        </select>
    </div>    


    <!-- ------------dropdown for date------ -->
    <div class="date">
      <label for="trip-start">From:</label>
      <input type="date" id="trip-start" name="trip-start">

      <label for="trip-end">To:</label>
      <input type="date" id="trip-end" name="trip-end">
    </div>

    <!-- ------------dropdown for time------ -->
    <div class="time">
      <label for="start_time">From</label>
      <input type="time" id="start_time" name="start_time" required>


      <label for="end_time">To:</label>
      <input type="time" id="end_time" name="end_time" required>
    </div>
      
    <!-- ------------dropdown for locality------ -->
    <div class="locality">
      <label for="locality">Locality:</label>
      <select name="locality" id="locality" class="form-control" value="">
         <option value="">Select</option>
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
      </select>
    </div>
    <!-- ------------SUBMIT BUTTON------ -->
    <button type="button" class="btn btn-primary">Submit</button>

    </div>
    <!-- ************FORM ENDS HERE************ -->

    </div>
    <!-- inner_content flex container -->
    </div>
    <!-- inner ends -->
  </div>
    <!--top_container ENDS HERE  -->