<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <p>welcome to 2024 </p>
        <h1> {{$name}}</h1>

          <form action="about" method="POST">
            @csrf
            <input type="text" name="name" id="name">
            <br><br>
            <select name="department" id="department">
                @foreach ($departments as $key => $item)
                <option value="{{$key}}">{{$item}}</option> 
                  
                @endforeach
               
            </select>
            <br><br>
            <input type="submit" value="submit">
            
          </form>
        
        

    </body>
</html>
