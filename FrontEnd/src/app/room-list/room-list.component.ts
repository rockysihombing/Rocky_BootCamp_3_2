import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-room-list',
  templateUrl: './room-list.component.html',
  styleUrls: ['./room-list.component.css']
})
export class RoomListComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  RoomList : object[] = [{'room_name' : 'Room 10A', 'availability' : true},{'room_name' : 'Room 10B', 'availability' : true},{'room_name' : 'Room 10C', 'availability' : true},{'room_name' : 'Room 10D', 'availability' : true}];
  
  GetRoom() : object[] {
  var available : object[] = [];
  for (var i = 0; i < this.RoomList.length; i++) {
  var room = this.RoomList[i];
  if (room["availability"] == true) {
  available.push(room);
  }
  }
  return available;
  }
  Book(id) : void {
  for (var i = 0; i < this.RoomList.length; i++) {
  if (this.RoomList[i]['room_name'] == id) {
  this.RoomList[i]['availability'] = false;
  break;
  }
  }
  }

}
