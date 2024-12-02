<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Records Archive</title>
    <link rel="stylesheet" href="{{asset('storage/css/archive.css')}}">
</head>

<body>
    <header class="header">
    <a href="{{route('sa.home')}}" class="home-btn">Home</a>
        <h1>Employee Records Archive</h1>
        <p>Keep deleted records for future reference.</p>
    </header>
    <main class="content">
        <section class="record-list">
            <h2>Archived Records</h2>
            <table>
                <thead>
                    <tr>
                        <th>Employee ID</th>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Date of Deletion</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($archives as $archive)
                    <tr>
                        <td>{{$archive->id}}</td>
                        <td>{{$archive->Name}}</td>
                        <td>{{$archive->jobTitle}}</td>
                        <td>{{$archive->updated_at}}</td>
                        <td><form action="{{route('profile.destroy', $archive->id)}}" method="post">
                            @csrf

                            @method('DELETE')
                           <button class="restore-btn">Restore</button> 
                        </form></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>

</body>

</html>