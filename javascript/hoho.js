var members = [{
    "name": "Teslov",
    "role": "Lead Programmer",
    "description": "Not only god amongst men but also a real gamer girl.",
    "imageURL": "https://cdn.discordapp.com/avatars/USERID/FILENAME.jpg"
  },
  {
    "name": "Kevin",
    "role": "3D Modeler",
    "description": "He does 3D modeling and has previously made music for the game."
  },
  {
    "name": "HarryWood",
    "role": "Animator",
    "description": "Just joined the team for some extra hands at animating our players."
  },
  {
    "name": "KeZeio",
    "role": "Programmer",
    "description": "Sometimes he fiddles with Teslov's code and finds bugs."
  },
  {
    "name": "Linnet",
    "role": "Alrgorithm Whore",
    "description": "Linnet and Teslov have been working together on the map generator. Linnet is a cat girl."
  },
  {
    "name": "DontStealMyCheese",
    "role": "Designer",
    "description": "Works on some design aspects of our game like branding and logos."
  },
  {
    "name": "Maia",
    "role": "Concept Artist",
    "description": "Another god amongst men but this one is a retired gamer. He works on concept art for our game."
  },
  {
    "name": "Tauwer",
    "role": "Community Manager (Twitter)",
    "description": "Tauwer not only is the Twitter manager but he also coordenated the team and revives this project."
  },
  {
    "name": "C.L.Magnus",
    "role": "Human",
    "description": "Tests the game and appreciates memes."
  },
  {
    "name": "Pedro",
    "role": "Human",
    "description": "Works on the website and devblogs."
  },
  {
    "name": "Brian",
    "role": "Human",
    "description": "Has worked on various devblogs and produced some 3D models."
  },
  {
    "name": "Siggyman",
    "role": "Human",
    "description": "He just greets everyone in the Mycelium discord. He's not part of the team but he's a honorable mention."
  }
];

jQuery(document).ready(function($) {
  $(".meettheteam .member_button").each(function() {
    for (var i = 0; i < members.length; i++) {
      if ($(this).children("h1").text() == members[i].name) {
        $(this).children("p").text(members[i].role);
        break;
      }
    }
  });

  $(".meettheteam .member_button").click(function() {
    for (var i = 0; i < members.length; i++) {
      if ($(this).children("h1").text() == members[i].name) {
        console.log("found");
        $(".meettheteam .middle h1.member_name").text(members[i].name);
        $(".meettheteam h2.member_role").text(members[i].role);
        $(".meettheteam p.member_description").text(members[i].description);
        break;
      } else {
        console.log("not found");
      }
    }
  });
});
