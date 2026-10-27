<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Information</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            min-height: 100vh;
        }

        .card {
            background-color: #ffffff;
            width: 100%;
            max-width: 380px;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.12);
        }

        .card h2 {
            color: #2c3e50;
            font-size: 1.5rem;
            margin-bottom: 20px;
            text-align: center;
            border-bottom: 2px solid #eef2f5;
            padding-bottom: 12px;
        }

        .info-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 12px 0;
            border-bottom: 1px dashed #eef2f5;
        }

        .info-item:last-child {
            border-bottom: none;
        }

        .label {
            color: #7f8c8d;
            font-size: 0.95rem;
            font-weight: 500;
        }

        .value {
            color: #2c3e50;
            font-size: 1rem;
            font-weight: 600;
        }

        .badge {
            background-color: #e8f5e9;
            color: #2e7d32;
            padding: 4px 10px;
            border-radius: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <?php
        $students = [
            ["Sokha", 21, "Western University", 3.8],
            ["Dara", 20, "Western University", 3.6],
            ["Ratanak", 19, "Western University", 3.9],
            ["Heang", 20, "Cam Tech", 4.0]
        ];
    ?>

    <?php foreach ($students as $student): ?>
        <div class="card">
            <h2>Student Profile</h2>
            <div class="info-item">
                <span class="label">Name</span>
                <span class="value"><?php echo $student[0]; ?></span>
            </div>
            <div class="info-item">
                <span class="label">Age</span>
                <span class="value"><?php echo $student[1]; ?> years</span>
            </div>
            <div class="info-item">
                <span class="label">University</span>
                <span class="value"><?php echo $student[2]; ?></span>
            </div>
            <div class="info-item">
                <span class="label">GPA</span>
                <span class="value badge"><?php echo $student[3]; ?> / 4.0</span>
            </div>
        </div>
    <?php endforeach ?>
</body>
</html>