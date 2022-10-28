package ugatheaters.domain

import kotlinx.serialization.Serializable

@Serializable
open class User(var userName: String){
    var password: String? = null
    //val id = userName
    //var loginStatus: Boolean? = null
    //var accountType: AccountType? = null
}

@Serializable
class Customer(var user: String, val email: String) : User(user){
    var firstName: String? = "John"
    var lastName: String? = "Scherer"
    var accountStatus: AccountStatus? = AccountStatus.ACTIVE
    val name get() = "$firstName $lastName"
}

@Serializable
class Admin(var user: String) : User(user)

@Serializable
enum class AccountStatus{
    ACTIVE, INACTIVE, SUSPENDED
}

@Serializable
enum class AccountType{
    CUSTOMER, ADMIN
}

var currentUsers = mutableListOf<User>(Customer("yellowjs", "johnjosephscherer@gmail.com"))

