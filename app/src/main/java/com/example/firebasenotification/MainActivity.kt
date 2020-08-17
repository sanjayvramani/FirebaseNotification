package com.example.firebasenotification

import androidx.appcompat.app.AppCompatActivity
import android.os.Bundle
import android.util.Log
import com.google.firebase.iid.FirebaseInstanceId
import java.io.IOException

class MainActivity : AppCompatActivity() {

    private val SENDER_ID="860928798905";
    private val TAG = MainActivity::class.simpleName
    override fun onCreate(savedInstanceState: Bundle?) {
        super.onCreate(savedInstanceState)
        setContentView(R.layout.activity_main)
        getToken()
    }

    private fun getToken() {

        val tokenId = FirebaseInstanceId.getInstance().token.toString()

        //println("Token is $tokenId")
        Log.d(TAG,tokenId)

        /*Thread(Runnable {
            try {

                val newToken = FirebaseInstanceId.getInstance().getToken(SENDER_ID,"FCM").toString()
                println("Token --> $newToken")

            } catch (e: IOException) {
                e.printStackTrace()
            }
        }).start()*/
    }

}