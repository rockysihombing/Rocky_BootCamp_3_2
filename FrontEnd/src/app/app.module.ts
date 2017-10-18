import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { RoomListComponent } from './room-list/room-list.component';

import { RouterModule } from '@angular/router';
import { FormsModule } from '@angular/forms';
import { HttpModule } from '@angular/http';
import { TransactionComponent } from './transaction/transaction.component';
import { CustomerComponent } from './customer/customer.component';

@NgModule({
  declarations: [
    AppComponent,
    RoomListComponent,
    TransactionComponent,
    CustomerComponent
  ],
  imports: [
    BrowserModule, FormsModule, HttpModule,
    RouterModule.forRoot
    ([
      {path : '', component : RoomListComponent}
    ])
    
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
