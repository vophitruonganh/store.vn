import { Component } from '@angular/core';
import { PostsService } from '../services/posts.service';
@Component({
  selector: 'products',
  // templateUrl: './components/product.component.html',
  template : '<h1>Sam Pham</h1>',
  providers : [PostsService]
})

export class ProductComponent {
  name : string;
  age : number;
  address : address;
  email : string;
  phone : string;
  posts : Post[];

  constructor(private postService : PostsService){

  }
}
interface address {
	district : string;
	province : string;
}
interface Post{
	id : number;
	body : string;
	title :string;
	userId : number;
	url : string;
	thumbnailUrl : string;
	albumId : number;
}


