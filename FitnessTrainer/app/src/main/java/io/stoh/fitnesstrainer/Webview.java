package io.stoh.fitnesstrainer;

import android.content.Intent;
import android.net.Uri;
import android.os.Bundle;
import android.support.v7.app.AppCompatActivity;
import android.webkit.WebView;
import android.webkit.WebViewClient;

/**
 * Created by GeczySSD on 2/21/2016.
 */
public class Webview extends AppCompatActivity {
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.webview);

        WebView webview = new WebView(this);
        webview =(WebView) findViewById(R.id.webView);
        webview.setWebViewClient(new WebViewClient());
        webview .getSettings().setJavaScriptEnabled(true);
        webview .getSettings().setDomStorageEnabled(true);
        webview.loadUrl("https://stoh.io/gym/GymGo/public/");

    }
}