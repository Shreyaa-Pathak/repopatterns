<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px auto;
            max-width: 800px;
            padding: 20px;
            line-height: 1.6;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            margin-bottom: 5px;
            color: #333;
        }

        .contact-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .section {
            margin-bottom: 25px;
        }

        .section-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
            color: #333;
            text-transform: uppercase;
        }

        .education-item, .skills-item {
            margin-bottom: 15px;
        }

        .education-item h3 {
            margin-bottom: 5px;
            color: #444;
        }

        .education-item p {
            margin: 5px 0;
            color: #666;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            margin-bottom: 8px;
            color: #555;
        }

        .summary {
            text-align: justify;
            color: #555;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>{{ $cv->name}}</h1>
    </div>
    
    <div class="contact-info">
        <p>{{ $cv->address }} | {{ $cv->contact }}</p>
        <p>{{ $cv->email }}</p>
    </div>

    <div class="section">
        <div class="section-title">Summary</div>
        <div class="summary">
        {{ $cv->summary }}
        </div>
    </div>

    <div class="section">
        <div class="section-title">Education</div>
        <div class="education-item">
            
            <p>{{ $cv->education }}</p>
        </div>
       
    </div>

    <div class="section">
        <div class="section-title">Technical Skills</div>
        <ul>
        {{ $cv->technical_skills }}
        </ul>
    </div>

    <div class="section">
        <div class="section-title">Soft Skills</div>
        <ul>
        {{ $cv->soft_skills }}
        </ul>
    </div>

    <a href="{{ route('cv.index') }}">Back to CV List</a>
    <a href="{{ route('cv.edit', $cv->id) }}">Edit</a>

    <form action="{{ route('cv.destroy', $cv->id) }}" method="POST" style="display: inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>

    <script>

        document.addEventListener('keydown', function(e) {
            if (e.ctrlKey && e.key === 'p') {
                window.print();
            }
        });
    </script>
</body>
</html>