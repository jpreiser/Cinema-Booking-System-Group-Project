package ugatheaters.routes

import io.ktor.server.routing.*
import io.ktor.http.*
import io.ktor.server.application.*
import io.ktor.server.http.content.*
import io.ktor.server.response.*
import io.ktor.server.request.*
import ugatheaters.routes.*
import ugatheaters.domain.*

fun Route.staticRouting() {
    route("/") {
        static {
            resources("files")
        }
        get{
            call.respondRedirect("/index.html", permanent = true)
        }
    }
}