<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Lapangan</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://unpkg.com/feather-icons"></script>
    <style>
        /* Custom styles */
        .table-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 1px; /* Reduced padding from 100px to 50px */
        }

        .text-head {
            text-align: center;
            color: #28a745;
            margin-bottom: 20px;
        }

        .table {
            width: 80%;
            border-spacing: 0;
            text-align: center;
            border-radius: 12px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            padding: 10px;
            background-color: #12192c;
        }

        .table th,
        .table td {
            padding: 8px;
            font-size: 14px;
        }

        .table th {
            font-weight: 300;
            color: #28a745;
            line-height: 26px;
        }

        .table thead tr {
            background: #12192c;
        }

        .table td {
            font-weight: 300;
            color: white;
            line-height: 26px;
            text-transform: uppercase;
        }

        .table tbody tr:nth-child(odd) {
            background: #002147;
        }

        .table tbody tr:nth-child(even) {
            background: #12192c;
        }

        .btn-status {
            display: inline-block;
            font-weight: 700;
            font-size: 12px;
            line-height: 20px;
            text-transform: uppercase;
            width: 120px;
            text-align: center;
            padding: 8px;
            border-radius: 10px;
            transition: 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            color: white;
        }

        .btn__active {
            color: #f14044;
            border: 2px solid #f14044;
        }

        .btn__active:hover {
            background: #f14044;
        }

        .btn__pledged {
            color: #4ed99c;
            border: 2px solid #4ed99c;
        }

        .btn__pledged:hover {
            background: #4ed99c;
        }

        /* @media (max-width: 768px) {
            .table td {
                display: block;
                text-align: right;
            }

            .table td:before {
                content: attr(data-label);
                float: left;
                text-transform: uppercase;
                font-weight: bold;
            }

            .table thead {
                display: none;
            }

            .table tbody tr {
                margin-bottom: 30px;
                display: block;
            }
        } */
    </style>
</head>

<body>
    <!-- Navbar -->
    <x-navbar></x-navbar>
    <!-- End Navbar -->

    <!-- Table Section -->
    <section class="lapangan mb-5" id="lapangan">
    <div class="table-container">
        <h2 class="text-head">Jadwal Lapangan</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nama Pelanggan</th>
                    <th>Lapangan</th>
                    <th>Sesi</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Nama Pelanggan">John Doe</td>
                    <td data-label="Lapangan">1</td>
                    <td data-label="Sesi">09:00 - 10:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__active">Terbooking</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Jane Doe</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">10:00 - 11:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__active">Terbooking</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Alice</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">11:00 - 12:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__pledged">Tersedia</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Bob</td>
                    <td data-label="Lapangan">1</td>
                    <td data-label="Sesi">12:00 - 13:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__active">Terbooking</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Charlie</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">13:00 - 14:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__pledged">Tersedia</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Charlie</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">14:00 - 15:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__pledged">Tersedia</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Charlie</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">15:00 - 16:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__pledged">Tersedia</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Charlie</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">16:00 - 17:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__pledged">Tersedia</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Charlie</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">17:00 - 18:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__pledged">Tersedia</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Charlie</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">18:00 - 19:00</td>
                    <td data-label="Status"><a href="#" class="btn-status btn__pledged">Tersedia</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Charlie</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">19:00 - 20:00</td>
                    <td data-label="Status"><a href="#" class="btn btn__pledged">Tersedia</a></td>
                </tr>
                <tr>
                    <td data-label="Nama Pelanggan">Charlie</td>
                    <td data-label="Lapangan">2</td>
                    <td data-label="Sesi">20:00 - 21:00</td>
                    <td data-label="Status"><a href="#" class="btn btn__pledged">Tersedia</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</section>
    <!-- End Table Section -->
    <script>
        feather.replace()
    </script>
</body>
</html>
