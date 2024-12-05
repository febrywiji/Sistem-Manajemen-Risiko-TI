@extends('layouts.app')

@section('content')
    <style>
        body {
            background: linear-gradient(120deg, #0f2027, #203a43, #2c5364);
            color: #ffffff;
            font-family: 'Orbitron', sans-serif;
            min-height: 100vh;
        }

        h1 {
            font-size: 2.5rem;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 2rem;
            animation: fadeInDown 1s ease;
        }

        form {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.5);
            animation: fadeInUp 1s ease;
        }

        label {
            font-weight: bold;
            text-transform: uppercase;
        }

        input, textarea, select {
            background: transparent;
            color: #fff;
            border: 1px solid #fff;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 1rem;
            transition: all 0.3s ease;
        }

        input:focus, textarea:focus, select:focus {
            outline: none;
            border-color: #00d4ff;
            box-shadow: 0 0 10px #00d4ff;
        }

        button {
            background: linear-gradient(90deg, #ff6a00, #ee0979);
            border: none;
            color: white;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            text-transform: uppercase;
            transition: all 0.3s ease;
        }

        button:hover {
            background: linear-gradient(90deg, #ee0979, #ff6a00);
            transform: scale(1.1);
        }

        a {
            color: #00d4ff;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
        }

        a:hover {
            color: #ff6a00;
        }

        @keyframes fadeInDown {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>

    <div class="container mt-5">
        <h1>Create New Risk</h1>
        <!-- Form -->
        <form action="{{ route('risks.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Risk Title:</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter risk title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea name="description" class="form-control" id="description" rows="4" placeholder="Enter risk description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="severity" class="form-label">Severity Level:</label>
                <select id="severity" name="severity" required class="form-control">
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="mb-3">
                <label for="occurrence" class="form-label">Occurrence Level:</label>
                <select id="occurrence" name="occurrence" required class="form-control">
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="mb-3">
                <label for="detection" class="form-label">Detection Level:</label>
                <select id="detection" name="detection" required class="form-control">
                    @for ($i = 1; $i <= 10; $i++)
                        <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status:</label>
                <select id="status" name="status" required class="form-control">
                    @foreach (\App\Models\Risk::$statusDescriptions as $key => $description)
                        <option value="{{ $key }}">{{ $description }}</option>
                    @endforeach
                </select>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('adminHome') }}" class="btn btn-secondary">Back to List</a>
                <button type="submit" class="btn btn-warning">Create</button>
            </div>
        </form>
    </div>
@endsection
