<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Google Classroom</title>
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
  }
  
  .user-info {
    display: flex;
    align-items: center;
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
  
  .add-class-card {
    background-color: #f2f2f2;
    width: calc(33.33% - 40px);
    height: 200px;
    margin: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    cursor: pointer;
    transition: transform 0.3s ease-in-out;
    overflow: hidden;
    position: relative;
  }

  .add-class-card:hover {
    transform: translateY(-5px);
  }
  
  .add-class-card h3 {
    margin: 0;
    font-size: 20px;
    text-align: center;
    line-height: 200px;
  }

  @media screen and (max-width: 768px) {
    .class-card,
    .add-class-card {
      width: calc(50% - 40px);
    }
  }

  @media screen and (max-width: 480px) {
    .class-card,
    .add-class-card {
      width: calc(100% - 40px);
    }
  }
</style>
</head>
<body>

<div class="header">
  <h1>User Dashboard</h1>
  <div class="user-info">
    <img src="https://via.placeholder.com/40" alt="User Avatar">
    <p>Welcome, John Doe</p>
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
      <button style="background-color: #4169e1; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">view</button>
    </div>
  </div>
  <div class="class-card">
    <img src="https://via.placeholder.com/300x200" alt="Science">
    <div class="class-card-content">
      <h3>Science</h3>
      <p>Teacher: Jane Smith</p>
      <p>Students: 20</p>
      <button style="background-color: #4169e1; color: white; padding: 10px 20px; border: none; border-radius: 4px; cursor: pointer;">view</button>
    </div>
  </div>
  
  <!-- Add class card -->
  <div class="add-class-card">
    <h3>+ Add Patient</h3>
  </div>
</div>

</body>
</html>
