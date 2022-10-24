import businessLogic.management.*

fun main(){
    val admin = Admin("JJ")
    val movie = Movie("Tarzan")
    admin.editMovie(movie,"Alaska")
    movie.title = "lol"
    println(movie.title)
}