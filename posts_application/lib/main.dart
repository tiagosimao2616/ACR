import 'package:flutter/material.dart';
import 'package:posts_application/posts.dart';

void main() {
  runApp(MaterialApp(
    home: Blog(),
  ));
}

class Blog extends StatefulWidget {
  @override
  State<StatefulWidget> createState() {
    return _BlogState();
  }
}

class _BlogState extends State<Blog> {
  List<Post> posts = [
    Post(
        userId: 1,
        id: 1,
        title:
            "sunt aut facere repellat provident occaecati excepturi optio reprehenderit",
        body:
            "quia et suscipit\nsuscipit recusandae consequuntur expedita et cum\nreprehenderit molestiae ut ut quas totam\nnostrum rerum est autem sunt rem eveniet architecto"),
    Post(
        userId: 1,
        id: 2,
        title: "qui est esse",
        body:
            "est rerum tempore vitae\nsequi sint nihil reprehenderit dolor beatae ea dolores neque\nfugiat blanditiis voluptate porro vel nihil molestiae ut reiciendis\nqui aperiam non debitis possimus qui neque nisi nulla"),
    Post(
        userId: 1,
        id: 3,
        title: "ea molestias quasi exercitationem repellat qui ipsa sit aut",
        body:
            "et iusto sed quo iure\nvoluptatem occaecati omnis eligendi aut ad\nvoluptatem doloribus vel accusantium quis pariatur\nmolestiae porro eius odio et labore et velit aut"),
  ];

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text("O Meu Blog"),
        centerTitle: true,
        backgroundColor: Colors.lime[400],
      ),
    );
  }
}
