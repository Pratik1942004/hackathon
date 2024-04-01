<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Admin Dashboard</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #6495ED;
  }
  
  .header {
    background-color: #000080;
    color: white;
    padding: 20px;
    text-align: center;
    border-bottom: 4px solid #000080;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap; /* Added for responsiveness */
  }
  
  .user-info {
    display: flex;
    align-items: center;
    margin-bottom: 10px; /* Added for spacing */
  }
  
  .user-info img {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    margin-right: 10px;
  }
  
  .user-info p {
    margin: 0;
    font-size: 16px;
  }

  .search-box {
    display: flex;
    align-items: center;
    margin-bottom: 10px; /* Added for spacing */
  }

  .search-box input[type="text"] {
    padding: 8px;
    border: 2px solid royalblue;
    border-radius: 4px;
    margin-right: 10px;
    
    width: 150px; /* Adjusted width for responsiveness */
  }

  .search-box button {
    padding: 8px 16px;
    background-color: royalblue;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }

  .search-box button:hover {
    background-color: #4169E1;
  }

  
  .container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    padding: 20px;
  }
  
  .class-card {
    background-color: #f2f2f2;
    width: calc(33.33% - 40px);
    margin: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease-in-out;
    overflow: hidden;
    position: relative;
  }

  .class-card:hover {
    transform: translateY(-5px);
  }

  .class-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
  }
  
  .class-card-content {
    padding: 20px;
  }
  
  .class-card h3 {
    margin: 0;
    font-size: 20px;
    text-align: center;
    margin-bottom: 10px;
  }
  
  .class-card p {
    margin: 0;
    font-size: 16px;
    text-align: center;
  }
  
  .class-card button {
    display: block;
    width: 100%;
    padding: 8px 16px;
    margin-top: 10px;
    background-color:#4169e1;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  /* .class-card button:hover {
    background-color: #FF0000
  } */

  .update-btn:hover {
    background-color: #FF0000;
  }

  .update-btn:hover {
    background-color: #1e87dc;
  }

  .delete-btn {
    background-color: #f44336;
  }

  .delete-btn:hover {
    background-color: #d32f2f;
  }

  @media screen and (max-width: 768px) {
    .class-card {
      width: calc(50% - 40px);
    }
    .search-box input[type="text"] {
      width: 100%; /* Adjusted width for responsiveness */
    }
  }

  @media screen and (max-width: 480px) {
    .class-card {
      width: calc(100% - 40px);
    }
  }
</style>
</head>
<body>

<div class="header">
  <h1>Admin Dashboard</h1>
  <div class="user-info">
    <img src="https://via.placeholder.com/40" alt="User Avatar">
    <p>Welcome, Admin</p>
  </div>
  <!-- search box -->
  <div class="search-box">
    <input type="text" placeholder="Search..." style="background-color: royalblue;">
    <button style="background-color: royalblue;">Search</button>
  </div>
</div>

<div class="container">
  <!-- Sample class cards -->
  <div class="class-card">
    <img src="https://via.placeholder.com/300x200" alt="Mathematics">
    <div class="class-card-content">
      <h3>Mathematics</h3>
      <p>Teacher: John Doe</p>
      <p>Students: 25</p>
      <button class="update-btn">Update</button>
      <button class="delete-btn">Delete</button>
    </div>
  </div>
  <div class="class-card">
    <img src="https://via.placeholder.com/300x200" alt="Science">
    <div class="class-card-content">
      <h3>Science</h3>
      <p>Teacher: Jane Smith</p>
      <p>Students: 20</p>
      <button class="update-btn">Update</button>
      <button class="delete-btn">Delete</button>
    </div>
  </div>
  
  <!-- Add class card -->
  <div class="class-card">
    <div class="class-card-content">
      <h3>Add a new Patient</h3>
      <button class="add-btn">+Add</button>
    </div>
  </div>
</div>

</body>
</html>
