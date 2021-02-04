<html>
<head>
    <style>
        @page {
            margin: 0cm 0cm;
            font-family: Arial;
        }
        @font-face {
          font-family: "FuturaPTW02-Book";
          src: url("{{ $path }}") format('truetype');
        }

        body {
            font-family: 'FuturaPTW02-Book';
            margin: 3cm 2cm 2cm;
        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
          font-family: 'FuturaPTW02-Book';
        }
        header {
            font-family: 'FuturaPTW02-Book';
            position: fixed;
            top: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 30px;
        }

        footer {
            font-family: 'FuturaPTW02-Book';
            position: fixed;
            bottom: 0cm;
            left: 0cm;
            right: 0cm;
            height: 2cm;
            background-color: #2a0927;
            color: white;
            text-align: center;
            line-height: 35px;
        }
    </style>
</head>
<body>
<header>
    <h1>Styde.net</h1>
</header>

<main>
    <h1>TRADE/BARTER
AGREEMENT
Sample Agreement {{ $path }}</h1>
</main>

<footer>
    <h1>www.styde.net</h1>
</footer>
</body>
</html>
