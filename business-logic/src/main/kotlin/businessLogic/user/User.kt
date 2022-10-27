package businessLogic.user

import businessLogic.management.Booking
import businessLogic.user.CardInfo

open class User() {
    var userName: String? = null
    // var passWord: String = "" // figure out implementation
    var loginStatus: Boolean? = null
    var firstName: String = ""
    var lastName: String = ""
    val name: String get() = "$firstName $lastName"
    var userType: UserType? = null

    constructor(_user: String): this(){
        userName = _user

    }
    fun changePassword(){} // implement
    fun changeUserName(){} // implement
    fun editInfo(){} // implement
}

class Customer(user: String) : User(user){
    var status: AccountStatus? = null // gotta figure out how to not declare
    val cards = arrayOfNulls<CardInfo>(3)
    val bookings = listOf<Booking>()
    fun editPaymentInfo() : Boolean{return true} // implement
    fun placeOrder() : Boolean{return true} // implement
}

enum class AccountStatus{
    ACTIVE, INACTIVE, SUSPENDED
}

enum class UserType{
    CUSTOMER, ADMIN
}