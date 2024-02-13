<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 class="mt-20 text-center font-bold">
        <u>
            Add new Employee:
        </u>
    </h1>
    <div class="create-inputs flex justify-center items-center">
        <form class="flex flex-col space-y-4 ..." action="{{ route('cars.store') }}" method="post">
            @csrf
            @method('post')

                <label class="mr-2" for="department_id">Department Id:</label>
                <input class="border rounded px-2 py-1" type="text" name="department_id"><br>

                <label class="mr-2" for="name">Name:</label>
                <input class="border rounded px-2 py-1" type="text" name="name">

                <label class="mr-2" for="phone">Phone:</label>
                <input class="border rounded px-2 py-1" type="text" name="phone"><br>


                <button class="bg-blue-500 hover:bg-blue-700 h-8 px-4 mt-4 border border-blue-700 rounded pr-4" type="submit">Submit</button>
        </form>
    </div>

</body>
</html>