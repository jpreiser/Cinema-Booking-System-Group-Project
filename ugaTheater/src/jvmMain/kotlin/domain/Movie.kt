import kotlinx.serialization.Serializable

@Serializable
class Movie(val title: String){
    var category: String? = null
    var cast: String? = null
    var director: String? = null
    var producer: String? = null
    var synopsis: String? = null
    var trailerLink: String? = null

    val id = title.hashCode()

    companion object{
        const val path = "/movie"
    }
}