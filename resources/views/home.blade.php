<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hotel and Food Management</title>
  <!-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
   <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #f8f9fa;
  }
  
  header {
    background-color: #343a40;
    padding: 1em;
    text-align: center;
  }
  
  nav a {
    color: #ffffff;
    margin: 0 15px;
    text-decoration: none;
  }
  
  .section {
    padding: 20px;
    margin-top: 20px;
  }
  
  button {
    margin-top: 10px;
    padding: 5px 15px;
    cursor: pointer;
  }
  
  #hotel-list, #food-list, #search-results, #dashboard-data {
    margin-top: 20px;
  }
  
  .card {
    background-color: #ffffff;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  
   </style>
</head>
<body>
  <header>
    <nav>
      <a href="#hotel-listing">Hotel Listing</a>
      <a href="#food-listing">Food Listing</a>
      <a href="#search">Search</a>
      <a href="#dashboard">Dashboard</a>
    </nav>
  </header>
  <main>
    <section id="hotel-listing" class="section">
      <h2>Hotel Listing</h2>
      <input type="text" id="hotelSearch" placeholder="Search hotels by name">
      <button onclick="fetchHotels()">Search</button>
      <div id="hotel-list"></div>
    </section>

    <section id="food-listing" class="section">
      <h2>Food Listing</h2>
      <input type="text" id="foodSearch" placeholder="Search food items by name">
      <button onclick="fetchFoods()">Search</button>
      <div id="food-list"></div>
    </section>

    <section id="search" class="section">
      <h2>Search Hotels and Foods</h2>
      <input type="text" id="searchQuery" placeholder="Enter keyword">
      <button onclick="searchData()">Search</button>
      <div id="search-results"></div>
    </section>

    <section id="dashboard" class="section">
      <h2>Dashboard</h2>
      <div id="dashboard-data"></div>
      <canvas id="chart" width="400" height="200"></canvas>
    </section>
  </main>

  <!-- <script src="script.js"></script> -->
</body>
</html>
