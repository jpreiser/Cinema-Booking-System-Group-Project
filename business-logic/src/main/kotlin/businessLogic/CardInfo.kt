package businessLogic

class CardInfo(_number: String, _ccv: Byte, _expiration: Byte, _billingAddress: String, _user: User){
    var number: String = _number
        set(value){
            field = value.replace("\\s".toRegex(), "")
        }
    var ccv: Byte? = _ccv
    var expiration: Byte? = _expiration
    var billingAddress: String = _billingAddress
    var user : User = _user

    fun validateCard(): Boolean {return true} // implement
    fun clearCardInfo(): Unit {
        number = ""
        ccv = null
        expiration = null
        billingAddress = ""
    } // implement better
}