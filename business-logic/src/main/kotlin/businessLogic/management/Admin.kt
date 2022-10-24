package businessLogic.management

import businessLogic.user.*

class Admin(user: String) : User(user){
    private fun Movie.edit(newTitle: String){
        this.title = newTitle
    } // implement*/
    fun editMovie(movie: Movie, newTitle: String){
        movie.edit(newTitle)
    }
    fun Promotion.editPromotion(){} // implement
}
