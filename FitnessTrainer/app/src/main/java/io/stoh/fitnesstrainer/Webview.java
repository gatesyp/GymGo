package io.stoh.fitnesstrainer;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.webkit.WebView;

/**
 * Created by GeczySSD on 2/21/2016.
 */
public class Webview extends AppCompatActivity {
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.webview);
        Uri uri = Uri.parse("https://stoh.io/gym/GymGo/public/");
        Intent intent = new Intent(Intent.ACTION_VIEW, uri);
        startActivity(intent);
        WebView webview = new WebView(this);
        setContentView(webview);
        // Simplest usage: note that an exception will NOT be thrown
        // if there is an error loading this page (see below).
        webview.loadUrl("https://stoh.io/gym/GymGo/public/");
    }
}