<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/bootstrap.min.css">
  <title>validation par mail</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

  <style>
    body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

      display: flex;
      justify-content: center;
      align-items: center;
    }

    .card {
      max-width: 600px;
      width: 100%;
      background-color: #ffffff;
      border: 1px solid #e0e0e0;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      margin: 2rem auto;
    }

    .card h4 {
      text-align: center;
      font-size: 1.5rem;
      margin-bottom: 1.5rem;
      color: #333;
    }

    .card h6 {
      font-size: 1rem;
      color: #555;
      margin-bottom: 0.8rem;
    }

    .card h6 span {
      font-weight: normal;
      color: #000;
    }

    @media screen and (max-width: 475px) {
      .card {
        padding: 1rem;
      }

      .card h4 {
        font-size: 1.2rem;
      }

      .card h6 {
        font-size: 0.95rem;
      }
    }
  </style>

</head>

<body>

  <div class="container mt-5">

      <div class="card">
        <h4>Nouvelle demande de rendez-vous</h4>
        <h6>Nom : <span>{{ $data['nom'] }}</span></h6>
        <h6>Prénom : <span>{{ $data['prenom'] }}</span></h6>
        <h6>Email : <span>{{ $data['email'] }}</span></h6>
        <h6>Date du rendez-vous : <span>{{ $data['date'] }}</span></h6>
      </div>

    </div>
  </div>
</body>

</html>




</body>