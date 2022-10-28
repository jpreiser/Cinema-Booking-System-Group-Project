package ugatheaters

import io.ktor.server.engine.*
import io.ktor.server.netty.*
import ugatheaters.plugins.*

fun main() {
    embeddedServer(Netty, port = 8080, host = "0.0.0.0") {
        configureSockets()
        configureSerialization()
        configureHTTP()
        configureSecurity()
        configureRouting()
    }.start(wait = true)
}
