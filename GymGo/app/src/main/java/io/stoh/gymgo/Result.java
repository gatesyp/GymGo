
package io.stoh.gymgo;

import com.google.gson.annotations.Expose;
import com.google.gson.annotations.SerializedName;

public class Result {

    @SerializedName("id")
    @Expose
    private String id;
    @SerializedName("name")
    @Expose
    private String name;
    @SerializedName("static_image")
    @Expose
    private String staticImage;
    @SerializedName("gif_image")
    @Expose
    private String gifImage;
    @SerializedName("description")
    @Expose
    private String description;

    /**
     *
     * @return
     * The id
     */
    public String getId() {
        return id;
    }

    /**
     *
     * @param id
     * The id
     */
    public void setId(String id) {
        this.id = id;
    }

    /**
     *
     * @return
     * The name
     */
    public String getName() {
        return name;
    }

    /**
     *
     * @param name
     * The name
     */
    public void setName(String name) {
        this.name = name;
    }

    /**
     *
     * @return
     * The staticImage
     */
    public String getStaticImage() {
        return staticImage;
    }

    /**
     *
     * @param staticImage
     * The static_image
     */
    public void setStaticImage(String staticImage) {
        this.staticImage = staticImage;
    }

    /**
     *
     * @return
     * The gifImage
     */
    public String getGifImage() {
        return gifImage;
    }

    /**
     *
     * @param gifImage
     * The gif_image
     */
    public void setGifImage(String gifImage) {
        this.gifImage = gifImage;
    }

    /**
     *
     * @return
     * The description
     */
    public String getDescription() {
        return description;
    }

    /**
     *
     * @param description
     * The description
     */
    public void setDescription(String description) {
        this.description = description;
    }

}