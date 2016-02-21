package io.stoh.gymgo;

public class Utilities {

    private static boolean DEBUG_MODE = true;


    public static boolean equals(Object a, Object b) {
        return (a==b) || (a != null && a.equals(b));
    }

    public static String getServerIP() {
        return "https://stoh.io/";
    }


    public static boolean getDebugState() {
        return DEBUG_MODE;
    }

}
