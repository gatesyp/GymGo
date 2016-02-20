package io.stoh.gymgo;

import com.google.android.gms.auth.api.signin.GoogleSignInOptions;

/**
 * Created by GeczySSD on 2/19/2016.
 */
public class SignIn
{
    // Configure sign-in to request the user's ID, email address, and basic
// profile. ID and basic profile are included in DEFAULT_SIGN_IN.
    GoogleSignInOptions gso = new GoogleSignInOptions.Builder(GoogleSignInOptions.DEFAULT_SIGN_IN)
            .requestEmail()
            .build();
}
