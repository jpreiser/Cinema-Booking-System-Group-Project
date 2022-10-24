package businessLogic.user

import businessLogic.management.Booking
import businessLogic.user.CardInfo

open class User protected constructor(public val userName: String) {
    val passWord: String = "" // figure out implementation
    var loginStatus: Int = 0
    var firstName: String = ""
    var lastName: String = ""
    val name: String get() = "$firstName $lastName"

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