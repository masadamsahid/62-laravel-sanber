<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <h1>Buat Account Baru!</h1>
    <h3>Sign Up Form</h3>
    <form action="/welcome" method="post">
        @csrf
        <div>
            <p>First name:</p>
            <input type="text" name="fName" placeholder="Adam" />
        </div>
        <div>
            <p>Last name:</p>
            <input type="text" name="lName" placeholder="Sahid" />
        </div>
        <div>
            <p>Gender:</p>
            
            <input type="radio" id="male" name="gender" value="male" />
            <label for="male">Male</label><br />
            
            <input type="radio" id="female" name="gender" value="female" />
            <label for="female">Female</label><br />
            
            <input type="radio" id="wallmartbag" name="gender" value="wallmartbag" />
            <label for="wallmartbag">Wall Mart Bag</label><br />
            
            <input type="radio" id="other" name="gender" value="other" />
            <label for="other">other</label>
        </div>
        <div>
            <p>Language Spoken:</p>
            
            <input type="checkbox" id="id" name="id" value="id" />
            <label for="id">Bahasa Indonesia</label><br />

            <input type="checkbox" id="en" name="en" value="en" />
            <label for="en">English</label><br />
            
            <input type="checkbox" id="other" name="other" value="other" />
            <label for="other">other</label><br />
        </div>
        <div>
            <p>Bio:</p>
            <textarea name="bio" id="bio" rows="10"></textarea>
        </div>
        <button type="submit">Sign Up</button>
    </form>
</body>

</html>